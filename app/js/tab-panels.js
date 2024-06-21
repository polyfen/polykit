document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-button');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const tab = this.getAttribute('data-tab');
            const container = this.closest('.tab-container');
            const tabPanels = container.querySelectorAll('.tab-panel');
            const buttons = container.querySelectorAll('.tab-button');

            // Oculta todos los contenidos dentro del contenedor
            tabPanels.forEach(panel => {
                panel.classList.remove('active');
            });

            // Muestra el contenido correspondiente a la solapa seleccionada dentro del contenedor
            container.querySelector(`.${tab}-content`).classList.add('active');
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });
            // Añade la clase 'active' al botón que fue clickeado
            this.classList.add('active');
        });
    });
});

console.log("tab-panels")