<p class="text-center fw-bold mt-4 mb-3">درصد پیشرفت شما در این دوره:</p>
<div class="d-flex justify-content-center align-items-center position-relative" style="height: 200px;">
    <div id="progress-circle" data-progress="{{ number_format($progress,1) }}" wire:ignore></div>
    <div id="progress-info" class="ml-3 d-flex align-items-center justify-content-center">
        <div class="progress-info-text ">
            <span> {{ number_format($progress,1) }}%</span>
        </div>
    </div>

</div>
