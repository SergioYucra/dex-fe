document.addEventListener('DOMContentLoaded', () => {
    const player = new Plyr('#player', {
        controls: [
            'play-large', // El botón de reproducción grande en el centro
            'restart', // Botón de reinicio
            'rewind', // Botón de retroceso
            'play', // Botón de reproducción/pausa
            'fast-forward', // Botón de avance rápido
            'progress', // Barra de progreso
            'current-time', // Tiempo actual
            'duration', // Duración total
            'mute', // Botón de silencio
            'volume', // Control de volumen
            'captions', // Subtítulos
            'settings', // Configuración
            'pip', // Picture-in-Picture
            'airplay', // Airplay
            'fullscreen' // Botón de pantalla completa
        ],
        settings: ['captions', 'quality', 'speed'],
        speed: { selected: 1, options: [0.5, 0.75, 1, 1.25, 1.5, 1.75, 2] },
        quality: { default: 720, options: [144, 240, 360, 480, 720, 1080] },
        invertTime: true, // Mostrar el tiempo restante en lugar del tiempo transcurrido
        captions: { active: false, update: false } // Desactivar subtítulos por defecto
    });
});