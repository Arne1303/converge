@props([
    'activeClasses' => 'dark:bg-white/[0.06] bg-gray-100 dark:text-violet-400 text-violet-500',
])
<li>
    <button type="button" x-bind:id="$id('tab', getTabIndex($el.parentElement, $refs.tablist))"
        x-on:click="activate($el.id)" x-on:focus="activate($el.id)" x-bind:tabindex="isActive($el.id) ? 0 : -1"
        x-bind:aria-selected="isActive($el.id)"
        x-bind:class="isActive($el.id) ?
            @js($activeClasses) :
            'my-2 rounded-lg group flex items-center gap-x-2  px-3 py-2 text-sm font-semibold outline-none transition duration-75'"
        {{ $attributes->merge(['class' => 'inline-flex items-center px-5 rounded-t-md ']) }} role="tab">
        {{ $slot }}
    </button>
</li>
