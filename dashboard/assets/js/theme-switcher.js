document.addEventListener('DOMContentLoaded', function () {
    // Add click event listener to the theme toggle button
    document.getElementById('themeToggleBtn').addEventListener('click', toggleTheme);
    // Function to toggle between light and dark themes
    function toggleTheme() {
        const currentTheme = document.body.className;
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';

        // Set the theme class on the body and save it in a cookie
        document.body.className = newTheme;
        document.cookie = 'theme=' + newTheme + '; path=/';
    };
});
