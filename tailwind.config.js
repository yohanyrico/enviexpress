import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // Archivos de Laravel/Jetstream
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',

        // Todas tus vistas y componentes
        './resources/views/**/*.blade.php',
        './resources/**/*.js',     // ← incluye archivos JS
        './resources/**/*.vue',    // ← si usas Vue (puedes quitar si no usas)
        './resources/**/*.ts',     // ← si usas TypeScript
        './resources/**/*.tsx',    // ← si usas React/TSX
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // 👇  Colores personalizados opcionales
            colors: {
                brand: {
                    DEFAULT: '#FF7F11',   // naranja corporativo ejemplo
                    dark: '#CC660D',      // tono más oscuro
                },
            },
        },
    },

    plugins: [
        forms,
        typography,
    ],
}
