<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Jenssegers\Agent\Agent;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next)
    {
        $agent = (new Agent());

        // تشخیص نوع دستگاه
        if ($agent->isMobile()) {
            $deviceType = 'Mobile';
        } elseif ($agent->isTablet()) {
            $deviceType = 'Tablet';
        } else {
            $deviceType = 'Desktop';
        }

        $visitorId = $request->cookie('visitor_id');

        if (!$visitorId) {
            $visitorId = uniqid();
            $response = $next($request);
            $response->withCookie(cookie('visitor_id', $visitorId, 60 * 24));
        } else {
            $response = $next($request);
        }

        // بررسی کش قبل از بررسی پایگاه داده
        $cacheKey = 'visitor:' . $visitorId;
        if (!Cache::has($cacheKey)) {
            $existingVisitor = Visitor::where('ip_address', $request->ip())
                ->where('user_agent', $request->userAgent())
                ->where('visitor_id', $visitorId)
                ->latest()
                ->first();

            if (!$existingVisitor) {
                $visitor = new Visitor();
                $visitor->ip_address = $request->ip();
                $visitor->referer = $request->headers->get('referer');
                $visitor->user_agent = $request->userAgent();
                $visitor->device_type = $deviceType;
                $visitor->visitor_id = $visitorId;
                $visitor->save();
            }

            // کش کردن اطلاعات برای مدت معین
            Cache::put($cacheKey, true, 60); // کش کردن برای 60 دقیقه
        }

        return $response;
    }
}
