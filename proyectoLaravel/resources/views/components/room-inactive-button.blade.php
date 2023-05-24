<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block items-center  bg-dark-2 text-h text-highlight-regular text-lead-bold rounded-[10px] py-[10px] px-[60px] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
