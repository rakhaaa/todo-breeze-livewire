<div>
    @if ($showNotification)
        <div id="notification" class="fixed top-0 right-0 mt-4 mr-4 bg-blue-500 text-white p-4 rounded-lg shadow-lg z-50">
            <p>{{ $message }}</p>
        </div>
        @script
            <script>
                document.addEventListener('livewire:load', function() {
                    setTimeout(function() {
                        let notification = document.getElementById('notification');
                        if (notification) {
                            notification.style.opacity = '0';
                            setTimeout(function() {
                                notification.style.display = 'none';
                                @this.set('showNotification', false);
                            }, 500); // Adjust for smooth transition
                        }
                    }, 3000);
                });
            </script>
        @endscript
    @endif
</div>
