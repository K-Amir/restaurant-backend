<div>
    <div class="py-12 bg-grey-900 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 h-fit" id="modal-create">
        <div role="alert" class="container bg-dark-2 p-3 rounded-[8px] mx-auto md:w-2/5 max-w-lg relative mh-fit">
            <h4 class="titulo text-heading-2 text-light-3 text-center mb-2">Crear reserva</h4>
        <button class="absolute text-light-3 text-heading-2 right-[1em] top-4" onclick="modalHandlerCreate()">X</button>
            <div class="bg-dark-3 p-2 bg-white shadow-md rounded-[8px]  border-gray-400">
                <x-input-modal id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" placeholder="Nombre" required
                >
                    <x-slot name="label">
                        Nombre
                    </x-slot>
                    <x-slot name="icon">
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.28454 3.86092L4.28696 3.85041C4.51476 2.86238 5.07365 2.07194 5.7919 1.59436L5.79216 1.5942C6.5094 1.11488 7.38533 0.945488 8.25095 1.19958C9.12033 1.45477 9.81432 2.08875 10.2331 2.907L10.2332 2.90709L17.9321 17.875L17.255 23.9164L12.3112 21.6482L4.63164 6.66649C4.20821 5.85238 4.05924 4.85267 4.28437 3.8616L4.28454 3.86092ZM16.7085 18.1657L9.21123 3.58936C8.94686 3.07019 8.50775 2.66774 7.95729 2.50546L7.95718 2.50543L7.95524 2.50486C7.403 2.34276 6.84414 2.44997 6.38584 2.75464L6.38601 2.75449C5.9289 3.058 5.57333 3.56054 5.42848 4.18882C5.28313 4.81925 5.37772 5.45577 5.6478 5.97287L5.65079 5.97869L13.1296 20.5681L16.2778 22.0131L16.7085 18.1657ZM11.0687 5.86993L6.48798 8.94485L5.89296 7.786L10.4736 4.7111L11.0687 5.86993ZM17.2558 23.9167L11.8743 21.4475L12.2065 20.7791C12.7411 19.7161 13.4793 18.8862 14.3467 18.3105L14.3473 18.3101C15.2183 17.7064 16.2241 17.3627 17.2686 17.3433L17.3103 17.3443L17.9831 17.3366L17.2558 23.9167ZM13.6134 20.7909L16.2762 22.0127L16.6356 18.7571C16.0171 18.8726 15.4575 19.1121 14.9551 19.4603L14.9538 19.4612L14.9423 19.4689C14.442 19.8004 13.996 20.2376 13.6322 20.7616L13.6134 20.7909ZM15.1655 18.5113L14.1454 19.196L7.97074 7.17035L8.99085 6.4856L15.1655 18.5113Z" fill="black"/>
                        </svg>
                    </x-slot>
                </x-input-modal>

                <x-input-modal id="phone" class="block mt-1 w-full" type="text" name="name" value="{{ old('phone') }}" placeholder="Teléfono" required
                >
                    <x-slot name="label">
                        Teléfono
                    </x-slot>
                    <x-slot name="icon">
                    <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5615 23.995C10.8936 23.995 7.55651 21.8688 4.85395 18.4471C3.05149 16.2505 1.6564 13.5413 0.817994 10.5065L0.783577 10.3634C0.0815631 7.45401 0.361201 5.02081 1.571 3.51052L4.3665 0L9.80041 6.80731L7.66384 9.48286C7.45199 9.75618 7.32135 10.1296 7.32135 10.5412C7.32135 10.9528 7.45199 11.3263 7.66414 11.6L7.66386 11.5996L10.2828 14.8805C10.501 15.1511 10.8013 15.3183 11.1327 15.3183C11.4642 15.3183 11.7644 15.1511 11.9827 14.8804L14.1183 12.205L19.5488 19.0123L16.7322 22.5155C15.9546 23.4349 14.9032 24 13.7464 24C13.6814 24 13.6168 23.9982 13.5524 23.9947L13.5616 23.9951L13.5615 23.995ZM4.36817 2.2479L2.46732 4.63663C1.60308 5.71505 1.43664 7.58622 1.99676 9.90723C2.80636 12.8259 4.09395 15.313 5.75145 17.3247L5.75538 17.3295C8.22817 20.4612 11.2197 22.4096 13.5615 22.4096C13.6185 22.4143 13.6851 22.417 13.7522 22.417C14.5597 22.417 15.2947 22.0283 15.8447 21.3922L15.8426 21.3946L17.7594 19.0101L14.1166 14.4497L12.8747 16.0044C12.4274 16.5607 11.8113 16.9044 11.131 16.9044C10.4507 16.9044 9.83457 16.5607 9.38714 16.0042L6.76326 12.7193C6.32537 12.1584 6.05516 11.3901 6.05516 10.5427C6.05516 9.69537 6.32536 8.92711 6.76371 8.36568L8.00515 6.81045L4.36817 2.2479Z" fill="black"/>
                        </svg>
                    </x-slot>
                </x-input-modal>

                <x-input-modal id="date" class="block mt-1 w-full" type="time" name="date" value="{{ old('date') }}" placeholder="Hora de llegada" required>
                    <x-slot name="label">
                        Hora de llegada
                    </x-slot>
                    <x-slot name="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="22" height="22" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_431_171" transform="scale(0.03125)"/>
                            </pattern>
                            <image id="image0_431_171" width="32" height="32" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAADsAAAA7AF5KHG9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAldJREFUWIXt101sTVEQB/BfHy1SX40FXbMjaDXsSLSLRsKi0UQkLMTGwtfCEk18rIiVpLFTrRURSRGxsBAhIqmiiURJ6ivBQkRDU5TFOc+7r9rX+15fa+Of3Nxz58zM+Z+5kzNzKB216McwPuABzmEb5k3C75g4iF40JWTN+DXOMxjJLJ3I8YyUBC5jGTK4EmUD0X4QQ6jEnDhXhTXYg2rcwc+Ua42J7biG+gn06tCGF/IjcheL0y62HBextQSiWVRhHz4mSLzCijTGndHg7SQIZFGL+6NITBiJZiG7j5SBAMzGJfm/Y1aZfBdFIhmJtnI4rRWS7TmWpNTP5sQXo37FIbzBjiIItMjtqCWlzf6EzdnkxOMovFoEgdaEs9aUNlV4KXdYzc3EiQPowtEiCJSCYVyI42psmoyzUiJAOMyydu2ZCZQLYUFiPL8Iux58iuNVUCMUmWLIrBTO/+xOvmK3EIlWIbQzC9hnc+49PIkfh4sgcEb+WT/Wc6KA/Y2oM5TBSBQWYjwaFSl0RgrM9cT3QAUWCVXstvQlsw735I7Ub0Lx+Ry/B3ELP8axr8RGPEqzk/GwWji4RnAeTyfh69+jSegBGqZhrXqh5DcnhX1CVnZPA4HuuFYfuZ6wUuhWTmUnphDfsQ7tQiL/x1/YLDQax8vos01o47ekUe6QayDLhdfRZ8foibEuJs+wEKfjuBzoj++TQltWNHbiJtam0G3AdewqZaHx8E4IYWdClhEq6DH5kexSvnvFH+wVKtiGhKxRrvQ2JuTr8VC40E4paoTGoleoqCXhN8b1nhO/BwOoAAAAAElFTkSuQmCC"/>
                            </defs>
                        </svg>
                    </x-slot>
                </x-input-modal>

                <x-input-modal id="people" class="block mt-1 w-full" type="number" name="people" value="{{ old('people') }}" placeholder="0" min="0" required >
                    <x-slot name="label">
                        Personas
                    </x-slot>
                    <x-slot name="icon">
                        <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.97638 12.6616C12.8842 12.6616 15.2415 9.82719 15.2415 6.3308C15.2415 2.8344 12.8842 0 9.97638 0C7.06851 0 4.71121 2.8344 4.71121 6.3308C4.71121 9.82719 7.06851 12.6616 9.97638 12.6616Z" fill="#292D32"/>
                            <path d="M9.97678 15.827C4.70104 15.827 0.404663 20.0813 0.404663 25.3232C0.404663 25.6777 0.63633 25.9563 0.93118 25.9563H19.0223C19.3172 25.9563 19.5488 25.6777 19.5488 25.3232C19.5488 20.0813 15.2525 15.827 9.97678 15.827Z" fill="#292D32"/>
                        </svg>
                    </x-slot>
                </x-input-modal>

                    <x-primary-button class="w-full text-center rounded-little py-3 my-4" onclick="modalHandlerCreate()">
                    {{ __('Confirmar') }}
                    </x-primary-button>
                
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center py-12" id="button">
        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandlerCreate(true)">Open Modal</button>
    </div>

    <script>
        let modalCreate = document.getElementById("modal-create");
        function modalHandlerCreate(val) {
            if (val) {
                fadeIn(modalCreate);
            } else {
                fadeOut(modalCreate);
            }
        }
        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }
        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>
    
</div>