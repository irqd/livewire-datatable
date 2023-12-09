<div class="toast-container position-fixed top-0 end-0 p-3" x-data="{
    showToast(type, message) {
        toast = new bootstrap.Toast($refs.toast)

        $refs.toast.classList.add('text-bg-' + type);
        $refs.toast.querySelector('.toast-body').innerHTML = message;

        toast.show();

        $refs.toast.addEventListener('hidden.bs.toast', () => {
            $refs.toast.classList.remove('text-bg-' + type);
        })
    }
}" x-on:dispatch-toast.window="showToast($event.detail.type, $event.detail.message)">
    <div id="liveToast" class="toast align-items-center border-0" role="alert" aria-live="assertive" aria-atomic="true" x-ref="toast">
        <div class="d-flex">
            <div class="toast-body">
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>