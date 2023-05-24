<div x-data="{ modelOpen: false }" class="py-1">
  <div {{ $attributes }} class='next-reservation' @click="modelOpen =!modelOpen">
    <div class="relative table max-w-fit">
      <svg width="70" height="70" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M63.3219 27.8722C53.5718 29.6373 46.6202 33.0265 40.3756 39.0599C34.105 45.1177 30.4997 51.4956 28.3314 60.3654C27.7485 62.7498 27.6703 63.7582 27.6602 69.0291C27.6512 73.7459 27.7555 75.4923 28.1582 77.3734C29.9892 85.9278 33.6307 92.7142 39.6139 98.7238C45.6185 104.755 52.4277 108.475 60.6511 110.219C63.6643 110.858 70.3857 111.09 73.8792 110.675C83.5089 109.531 92.3079 104.999 99.1083 97.681C104.172 92.2313 107.537 85.8147 109.357 78.1338C110.201 74.5723 110.271 64.5726 109.477 61.0755C107.462 52.2058 104.136 46.0573 98.022 39.899C92.0056 33.8383 86.2262 30.6139 77.5629 28.4841C75.8044 28.0517 74.063 27.9091 69.6669 27.837C66.5649 27.7861 63.7097 27.8018 63.3219 27.8722Z"
          fill="#D0D757" stroke="#D0D757" stroke-width="1.33333" />
        <path
          d="M50.9208 120.373C50.9448 124.541 53.9066 130.197 57.6248 133.175C60.6761 135.618 62.5169 136.48 65.8832 137.038C72.9157 138.203 79.3228 135.467 83.4546 129.534C85.4218 126.708 86.7281 123.058 86.7281 120.384V119.166H68.8211H50.9141L50.9208 120.373Z"
          fill="#D0D757" stroke="#D0D757" stroke-width="1.33333" />
        <path
          d="M65.0139 1.41853C62.6612 1.96932 61.3065 2.5397 59.2614 3.84097C54.8233 6.66423 51.4875 12.0827 51.0115 17.2417L50.833 19.177H68.7803H86.7279V17.8715C86.7279 14.5176 84.133 9.03981 81.2241 6.25235C76.7051 1.92216 70.6176 0.106745 65.0139 1.41853Z"
          fill="#D0D757" stroke="#D0D757" stroke-width="1.33333" />
        <path
          d="M14.1062 51.9477C10.9044 52.9928 8.65828 54.3577 6.33122 56.6727C2.76476 60.2201 1 64.3778 1 69.2318C1 74.3102 2.59696 78.1686 6.21277 81.825C9.41516 85.0633 12.8945 86.8105 17.0035 87.2437L18.766 87.4295V69.3525V51.2756L17.4265 51.2884C16.6899 51.2952 15.1956 51.5921 14.1062 51.9477Z"
          fill="#D0D757" stroke="#D0D757" stroke-width="1.33333" />
        <path
          d="M118.594 69.3133V87.3511H119.522C121.143 87.3511 123.73 86.5409 126.405 85.1956C130.738 83.0163 134.328 78.7395 135.685 74.1423C136.427 71.6259 136.377 66.2168 135.591 63.8972C134.022 59.2699 130.987 55.7027 126.463 53.1686C124.943 52.317 121.205 51.2756 119.669 51.2756H118.594V69.3133Z"
          fill="#D0D757" stroke="#D0D757" stroke-width="1.33333" />
      </svg>
      <div class="abs-center text-number text-dark-1">
        {{ $slot1 }}
      </div>
    </div>
    <div class="text-start">
      <p class="slot2 text-action text-light-1">{{ $slot2 }}</p>
      <p class="slot3 text-action text-light-1">{{ $slot3 }}</p>
    </div>
    <div class="text-end">
      <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-6 w-6" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
          d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <p class="slot4 text-action text-light-1">{{ $slot4 }}</p>
    </div>

  </div>

  <div x-show="modelOpen" class="absolute bottom-0 right-0 z-50 w-full overflow-y-auto" aria-labelledby="modal-title"
    role="dialog" aria-modal="true">

    <div class="mh-fit container relative mx-auto w-full rounded-[8px] bg-dark-2">

      <div x-cloak
        class="bg-white rounded-lg inline-block w-full max-w-xl transform overflow-hidden p-4 text-left shadow-xl transition-all 2xl:max-w-2xl">
        <div class="flex items-center justify-between space-x-4">

          <h4 class="titulo mb-2 text-center text-heading-2 text-light-3">Modificar reserva</h4>

          <button @click="modelOpen = false" class="text-gray-600 hover:text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </button>

        </div>

        <form class="mt-5">
          <x-input-modal id="name" class="mt-1 block w-full" type="text" name="name"
            value="{{ $reserva['nombre'] }}" placeholder="Nombre" required>
            <x-slot name="label">
              Nombre
            </x-slot>
            <x-slot name="icon">
              <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4.28454 3.86092L4.28696 3.85041C4.51476 2.86238 5.07365 2.07194 5.7919 1.59436L5.79216 1.5942C6.5094 1.11488 7.38533 0.945488 8.25095 1.19958C9.12033 1.45477 9.81432 2.08875 10.2331 2.907L10.2332 2.90709L17.9321 17.875L17.255 23.9164L12.3112 21.6482L4.63164 6.66649C4.20821 5.85238 4.05924 4.85267 4.28437 3.8616L4.28454 3.86092ZM16.7085 18.1657L9.21123 3.58936C8.94686 3.07019 8.50775 2.66774 7.95729 2.50546L7.95718 2.50543L7.95524 2.50486C7.403 2.34276 6.84414 2.44997 6.38584 2.75464L6.38601 2.75449C5.9289 3.058 5.57333 3.56054 5.42848 4.18882C5.28313 4.81925 5.37772 5.45577 5.6478 5.97287L5.65079 5.97869L13.1296 20.5681L16.2778 22.0131L16.7085 18.1657ZM11.0687 5.86993L6.48798 8.94485L5.89296 7.786L10.4736 4.7111L11.0687 5.86993ZM17.2558 23.9167L11.8743 21.4475L12.2065 20.7791C12.7411 19.7161 13.4793 18.8862 14.3467 18.3105L14.3473 18.3101C15.2183 17.7064 16.2241 17.3627 17.2686 17.3433L17.3103 17.3443L17.9831 17.3366L17.2558 23.9167ZM13.6134 20.7909L16.2762 22.0127L16.6356 18.7571C16.0171 18.8726 15.4575 19.1121 14.9551 19.4603L14.9538 19.4612L14.9423 19.4689C14.442 19.8004 13.996 20.2376 13.6322 20.7616L13.6134 20.7909ZM15.1655 18.5113L14.1454 19.196L7.97074 7.17035L8.99085 6.4856L15.1655 18.5113Z"
                  fill="black" />
              </svg>
            </x-slot>
          </x-input-modal>

          <x-input-modal id="phone" class="mt-1 block w-full" type="text" name="name"
            value="{{ $reserva['telefono'] }}" placeholder="Teléfono" required>
            <x-slot name="label">
              Teléfono
            </x-slot>
            <x-slot name="icon">
              <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M13.5615 23.995C10.8936 23.995 7.55651 21.8688 4.85395 18.4471C3.05149 16.2505 1.6564 13.5413 0.817994 10.5065L0.783577 10.3634C0.0815631 7.45401 0.361201 5.02081 1.571 3.51052L4.3665 0L9.80041 6.80731L7.66384 9.48286C7.45199 9.75618 7.32135 10.1296 7.32135 10.5412C7.32135 10.9528 7.45199 11.3263 7.66414 11.6L7.66386 11.5996L10.2828 14.8805C10.501 15.1511 10.8013 15.3183 11.1327 15.3183C11.4642 15.3183 11.7644 15.1511 11.9827 14.8804L14.1183 12.205L19.5488 19.0123L16.7322 22.5155C15.9546 23.4349 14.9032 24 13.7464 24C13.6814 24 13.6168 23.9982 13.5524 23.9947L13.5616 23.9951L13.5615 23.995ZM4.36817 2.2479L2.46732 4.63663C1.60308 5.71505 1.43664 7.58622 1.99676 9.90723C2.80636 12.8259 4.09395 15.313 5.75145 17.3247L5.75538 17.3295C8.22817 20.4612 11.2197 22.4096 13.5615 22.4096C13.6185 22.4143 13.6851 22.417 13.7522 22.417C14.5597 22.417 15.2947 22.0283 15.8447 21.3922L15.8426 21.3946L17.7594 19.0101L14.1166 14.4497L12.8747 16.0044C12.4274 16.5607 11.8113 16.9044 11.131 16.9044C10.4507 16.9044 9.83457 16.5607 9.38714 16.0042L6.76326 12.7193C6.32537 12.1584 6.05516 11.3901 6.05516 10.5427C6.05516 9.69537 6.32536 8.92711 6.76371 8.36568L8.00515 6.81045L4.36817 2.2479Z"
                  fill="black" />
              </svg>
            </x-slot>
          </x-input-modal>

          <x-input-modal id="date" class="mt-1 block w-full" type="time" name="date" value=" {{ date('H:i', strtotime($reserva['creacion'])) }}"
            placeholder="Hora de llegada" required>
            <x-slot name="label">
              Hora de llegada
            </x-slot>
            <x-slot name="icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="22" height="22" fill="url(#pattern0)" />
                <defs>
                  <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_431_171" transform="scale(0.03125)" />
                  </pattern>
                  <image id="image0_431_171" width="32" height="32"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAADsAAAA7AF5KHG9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAldJREFUWIXt101sTVEQB/BfHy1SX40FXbMjaDXsSLSLRsKi0UQkLMTGwtfCEk18rIiVpLFTrRURSRGxsBAhIqmiiURJ6ivBQkRDU5TFOc+7r9rX+15fa+Of3Nxz58zM+Z+5kzNzKB216McwPuABzmEb5k3C75g4iF40JWTN+DXOMxjJLJ3I8YyUBC5jGTK4EmUD0X4QQ6jEnDhXhTXYg2rcwc+Ua42J7biG+gn06tCGF/IjcheL0y62HBextQSiWVRhHz4mSLzCijTGndHg7SQIZFGL+6NITBiJZiG7j5SBAMzGJfm/Y1aZfBdFIhmJtnI4rRWS7TmWpNTP5sQXo37FIbzBjiIItMjtqCWlzf6EzdnkxOMovFoEgdaEs9aUNlV4KXdYzc3EiQPowtEiCJSCYVyI42psmoyzUiJAOMyydu2ZCZQLYUFiPL8Iux58iuNVUCMUmWLIrBTO/+xOvmK3EIlWIbQzC9hnc+49PIkfh4sgcEb+WT/Wc6KA/Y2oM5TBSBQWYjwaFSl0RgrM9cT3QAUWCVXstvQlsw735I7Ub0Lx+Ry/B3ELP8axr8RGPEqzk/GwWji4RnAeTyfh69+jSegBGqZhrXqh5DcnhX1CVnZPA4HuuFYfuZ6wUuhWTmUnphDfsQ7tQiL/x1/YLDQax8vos01o47ekUe6QayDLhdfRZ8foibEuJs+wEKfjuBzoj++TQltWNHbiJtam0G3AdewqZaHx8E4IYWdClhEq6DH5kexSvnvFH+wVKtiGhKxRrvQ2JuTr8VC40E4paoTGoleoqCXhN8b1nhO/BwOoAAAAAElFTkSuQmCC" />
                </defs>
              </svg>
            </x-slot>
          </x-input-modal>

          <x-input-modal id="people" class="mt-1 block w-full" type="number" name="people"
            value="{{ $reserva['num_plp'] }}" placeholder="0" min="0" required>
            <x-slot name="label">
              Personas
            </x-slot>
            <x-slot name="icon">
              <svg width="20" height="26" viewBox="0 0 20 26" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M9.97638 12.6616C12.8842 12.6616 15.2415 9.82719 15.2415 6.3308C15.2415 2.8344 12.8842 0 9.97638 0C7.06851 0 4.71121 2.8344 4.71121 6.3308C4.71121 9.82719 7.06851 12.6616 9.97638 12.6616Z"
                  fill="#292D32" />
                <path
                  d="M9.97678 15.827C4.70104 15.827 0.404663 20.0813 0.404663 25.3232C0.404663 25.6777 0.63633 25.9563 0.93118 25.9563H19.0223C19.3172 25.9563 19.5488 25.6777 19.5488 25.3232C19.5488 20.0813 15.2525 15.827 9.97678 15.827Z"
                  fill="#292D32" />
              </svg>
            </x-slot>
          </x-input-modal>
          <x-primary-button class="mt-4 w-full rounded-little py-3 text-center">
            {{ __('Confirmar') }}
          </x-primary-button>
        </form>
      </div>
    </div>
  </div>
</div>