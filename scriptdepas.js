document.addEventListener('DOMContentLoaded', function () {
    window.showRestaurants = function(department, zone) {
        let restaurantsContainerId;

        // Determinar el contenedor según la zona
        if (zone === 'occidental') {
            restaurantsContainerId = 'restaurants-occidental';
        } else if (zone === 'central') {
            restaurantsContainerId = 'restaurants-central';
        } else if (zone === 'oriental') {
            restaurantsContainerId = 'restaurants-oriental';
        }

        const restaurantsContainer = document.getElementById(restaurantsContainerId);

        // Hacer una llamada AJAX al archivo PHP
        fetch(`datos.php?department=${encodeURIComponent(department)}`)
            .then(response => response.json())
            .then(data => {
                let restaurantList = '';

                if (data.length > 0) {
                    restaurantList += `<h5>Restaurantes en ${department}:</h5><ul>`;
                    data.forEach(restaurant => {
                        restaurantList += `<li>${restaurant}</li>`;
                    });
                    restaurantList += '</ul>';
                } else {
                    restaurantList = '<p>No hay restaurantes disponibles.</p>';
                }

                // Mostrar la lista de restaurantes en el contenedor correspondiente
                restaurantsContainer.innerHTML = restaurantList;
                restaurantsContainer.style.display = 'block';
            })
            .catch(error => {
                console.error('Error al obtener los restaurantes:', error);
            });
    };
});
