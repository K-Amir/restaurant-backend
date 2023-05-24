@extends('layouts.app')


@section('content')
    
        
        <div class="flex bg-dark-1 h-[90vh]">

            <div class=" w-[75vw] p-4 pl-10"> 
                <h6>Nombre de la sala</h6>
                <div class="flex flex-wrap justify-center">
                @for ($i = 0; $i < 20; $i++)
                     <x-table>{{$i}}</x-table>
                @endfor

                @foreach($data['restaurantes']['salas'][0]['mesas'] as $mesa)
                        <x-table>$mesa[id]</x-table>
                @endforeach
                    
                <!-- Mesas -->
                </div>
            </div>

            <div class="bg-dark-3 w-[25vw] text-center">
                <div class="h-[30vh] pt-4">
                    <p class="text-heading-2 m-2">Reservas Pendientes</p>
                    <!-- Componente peticion de reserva -->
                </div>

                <div>
                    <p class="text-heading-2 m-2">Listado de reservas</p>

                        <div class="px-2 max-h-[56vh] overflow-auto ">
                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>

                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>

                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>
                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>

                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>

                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>
                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>

                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>

                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>
                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>

                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>

                            <x-next-reservation>
                                <x-slot name="slot1">
                                    1
                                </x-slot>

                                <x-slot name="slot2">
                                    Cayetano Ledesma
                                </x-slot>

                                <x-slot name="slot3">
                                    4 personas
                                </x-slot>

                                <x-slot name="slot4">
                                    19:00 h
                                </x-slot>
                            </x-next-reservation>
                            
                        
                        </div>

                </div>

            </div>
        </div>

        <div class="flex bg-dark-3 h-[10vh]">
            
            <div class="flex w-[75vw] p-4 pl-10 ">
                <a href="{{ route('reservas') }}" class="mr-[30px]">
                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1285_938)">
                        <path opacity="0.994" fill-rule="evenodd" clip-rule="evenodd" d="M33.079 0.594598C34.9838 0.583876 36.8885 0.594598 38.7927 0.626697C39.9559 0.715547 41.1115 0.865322 42.2594 1.07609C42.7922 1.15922 43.0811 1.46956 43.126 2.00696C43.4015 3.82923 43.6903 5.64817 43.9927 7.46382C46.1883 8.16057 48.2966 9.05935 50.3163 10.1602C51.9475 8.98603 53.5846 7.81974 55.2274 6.66134C55.4412 6.61852 55.6556 6.61852 55.8694 6.66134C59.5127 9.14897 62.6051 12.1984 65.1461 15.8096C65.3316 16.1187 65.3534 16.4397 65.2103 16.7726C64.0701 18.3461 62.9146 19.908 61.7436 21.4591C61.7006 21.5445 61.7006 21.6305 61.7436 21.7159C62.2873 22.6962 62.7791 23.7015 63.2201 24.7332C63.6143 25.797 63.9886 26.8671 64.3436 27.9431C66.3588 28.2538 68.3701 28.5857 70.3783 28.9382C70.4803 29.0056 70.5766 29.0801 70.6671 29.1629C70.9637 30.3204 71.1563 31.4971 71.2449 32.6938C71.5569 36.0745 71.4074 39.4346 70.7955 42.7729C70.6697 42.9424 70.5092 43.0599 70.3141 43.126C68.3194 43.4233 66.3293 43.7443 64.3436 44.089C63.6958 46.2839 62.8183 48.3807 61.7115 50.3804C62.8735 52.0348 64.0611 53.6719 65.2745 55.2916C65.3412 55.6088 65.2982 55.9086 65.1461 56.1904C62.6237 59.8048 59.5313 62.8324 55.8694 65.2745C55.5459 65.331 55.2461 65.2668 54.9706 65.0819C53.4414 63.943 51.9007 62.8195 50.3484 61.7114C48.3467 62.8137 46.2493 63.6913 44.0569 64.3436C43.7051 66.2394 43.395 68.1435 43.126 70.0572C43.0606 70.3917 42.8789 70.6376 42.5804 70.7955C38.2007 71.5576 33.8134 71.5999 29.4197 70.9239C29.1032 70.8 28.9003 70.5753 28.8098 70.2498C28.5305 68.3053 28.2198 66.3684 27.8789 64.4399C25.6615 63.8069 23.5539 62.919 21.5554 61.7756C19.9363 62.9884 18.2992 64.176 16.6442 65.3387C16.4302 65.3817 16.2162 65.3817 16.0022 65.3387C12.335 62.8484 9.24272 59.7778 6.72557 56.1262C6.62709 55.8559 6.60571 55.5779 6.66137 55.2916C7.83658 53.6347 9.02425 51.9873 10.2244 50.3483C9.05847 48.3486 8.18107 46.23 7.59224 43.9927C5.62322 43.6897 3.65451 43.379 1.68599 43.0618C1.35428 42.9867 1.15103 42.7838 1.07611 42.4519C0.865345 41.3041 0.71557 40.1485 0.62672 38.9852C0.583899 37.0381 0.583899 35.0903 0.62672 33.1432C0.723788 31.8213 0.916383 30.5162 1.20451 29.2271C1.28482 29.0422 1.42387 28.9247 1.62179 28.874C3.59268 28.5703 5.56139 28.2602 7.52805 27.9431C8.20123 25.7315 9.10001 23.6129 10.2244 21.5875C9.04569 20.0127 7.87947 18.4295 6.72557 16.8368C6.58125 16.4615 6.60263 16.0977 6.78976 15.7454C9.30961 12.1556 12.3805 9.12752 16.0022 6.66134C16.3515 6.58597 16.6725 6.65017 16.9652 6.85394C18.4893 7.98524 20.0198 9.10871 21.5554 10.2244C23.568 9.06487 25.6968 8.18753 27.9431 7.59222C28.2121 5.54673 28.544 3.51383 28.9382 1.49337C29.0583 1.35156 29.1976 1.23388 29.3555 1.14028C30.5971 0.894532 31.838 0.712594 33.079 0.594598ZM34.4914 14.1405C41.5776 13.8579 47.5159 16.2974 52.3064 21.4591C56.9736 27.0084 58.6428 33.364 57.3139 40.526C55.3905 48.312 50.6937 53.6513 43.2223 56.5435C35.9692 58.8829 29.2284 57.8775 22.9999 53.5262C16.8308 48.7087 13.8884 42.3633 14.1726 34.4913C14.7752 27.8378 17.6962 22.4773 22.9357 18.4096C26.3882 15.914 30.2401 14.491 34.4914 14.1405Z" fill="#D0D757"/>
                        <path opacity="0.993" fill-rule="evenodd" clip-rule="evenodd" d="M35.0691 16.6441C38.437 16.4393 40.994 17.7661 42.7409 20.6244C43.5305 22.1138 43.8303 23.6975 43.6396 25.3751C43.2666 28.402 42.1111 31.0765 40.1729 33.3998C39.0764 34.7133 37.6743 35.4407 35.9679 35.5826C34.7379 35.5242 33.6465 35.1069 32.6938 34.3307C30.7409 32.4491 29.4036 30.1912 28.6814 27.5578C28.18 25.748 28.1376 23.9293 28.553 22.1009C29.3882 19.5966 31.0465 17.8955 33.5284 16.9972C34.0458 16.8575 34.5594 16.7398 35.0691 16.6441Z" fill="#D0D757"/>
                        <path opacity="0.994" fill-rule="evenodd" clip-rule="evenodd" d="M29.4839 35.5828C29.7593 35.5527 30.0161 35.6066 30.2543 35.7433C32.7272 38.258 35.6161 38.9 38.921 37.6693C39.9874 37.1807 40.9285 36.5176 41.7458 35.6791C41.975 35.5893 42.2106 35.5674 42.452 35.6149C43.9927 36.3211 45.5335 37.0273 47.0742 37.7335C48.7774 38.4519 49.7513 39.7256 49.9953 41.5533C50.0383 44.0782 50.0383 46.6038 49.9953 49.1287C49.6698 50.6097 48.7601 51.4764 47.2668 51.7287C39.7126 51.7717 32.159 51.7717 24.6048 51.7287C23.0531 51.461 22.1441 50.552 21.8764 49.0003C21.8334 46.6038 21.8334 44.2066 21.8764 41.8101C21.9785 40.2545 22.6737 39.0451 23.9628 38.1829C25.8015 37.2956 27.6414 36.429 29.4839 35.5828Z" fill="#D0D757"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1285_938">
                        <rect width="72" height="72" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>

                <x-room-active-button class="mr-4">
                    Sala 1
                </x-room-active-button>

                <x-room-inactive-button>
                    Sala 2
                </x-room-inactive-button>
            </div>

            <div class="w-[25vw] p-2">
                <x-button-add-reservation>
                    Añadir Reserva
                </x-button-add-reservation>
            </div>

        </div>

    </x-slot>

@endsection