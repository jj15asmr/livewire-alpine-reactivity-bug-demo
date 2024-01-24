<div>
    <div
        x-data="{ numberClass: '' }"
        x-bind:class="numberClass"

        x-on:fade-in.window="
            numberClass = 'animate__animated animate__fadeIn';
            console.log('Component event caught...');
            $nextTick(() => { console.log('Classes: ' + $el.className) })
        "

        x-on:animationend="
            numberClass = '';
            console.log('Animated ended, removing class...');
            $nextTick(() => { console.log('Classes: ' + $el.className) })
        "

        class="mb-2"
    >
        <div class="fs-3">{{ $randomNumber }}</div>
    </div>

    <button wire:click="getNewNumber" class="btn btn-primary" type="button">Get New Number</button>
</div>
