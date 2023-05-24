<div>
    <div role="alert" id="modal-reject" class="container bg-dark-3 ring-highlight-regular border-highlight-regular border-2 rounded-[12px] py-10 px-4 md:w-2/5 max-w-lg relative mh-fit transition duration-150 ease-in-out ">
        <h6 class="text-lead-bold text-light-3 text-center mb-4">La reserva ha sido rechazada</h6>
            <x-primary-button class="w-full bg-highlight-dangerous text-center rounded-little py-2" onclick="modalHandlerReject()">
            {{ __('Ok') }}
            </x-primary-button>   
    </div>

    <script>
        let modalReject = document.getElementById("modal-reject");
        function modalHandlerReject(val) {
            if (val) {
                fadeIn(modalReject);
            } else {
                fadeOut(modalReject);
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