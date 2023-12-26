document.getElementById('sidebar-toggle-button').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('hidden');
    document.getElementById('main').classList.toggle('sm:ml-64');
})