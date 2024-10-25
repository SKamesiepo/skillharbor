<div>
    <button
        wire:click="triggerExport"
        wire:loading.attr="disabled"
        class="flex items-center rounded-md p-3 transition-all hover:bg-sky-200 hover:text-sky-700 hover:font-medium"
    >
        <div wire:loading.remove>
            <?php echo e($label); ?>

        </div>
        <div wire:loading.flex class="flex items-center">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z">
                    <animateTransform
                        attributeName="transform"
                        type="rotate"
                        dur="0.75s"
                        values="0 12 12; 360 12 12"
                        repeatCount="indefinite" />
                </path>
            </svg>
            <span class="ml-3"> Processing...</span>
        </div>

    </button>
</div>
<?php /**PATH /home/hubert/skillharbor-open/resources/views/livewire/reports/loading-button-animation.blade.php ENDPATH**/ ?>