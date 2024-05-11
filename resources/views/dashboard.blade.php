
<x-app-layout>

    <div class="py popup" id="loggedInMessage">
        <div class="max-w-7xl mx-auto ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <script>
          // Wait for the DOM content to fully load
document.addEventListener('DOMContentLoaded', function() {
    // Get the element with the ID "loggedInMessage"
    const loggedInMessage = document.getElementById('loggedInMessage');

    // Check if the element exists
    if (loggedInMessage) {
        // Set a timeout to hide the element after 1000 milliseconds (1 second)
        setTimeout(function() {
            // Hide the element by adding a CSS class that sets display to none
            loggedInMessage.style.display = 'none';
        }, 2000); // 2000 milliseconds = 2 second
    }
});

    </script>
</x-app-layout>


