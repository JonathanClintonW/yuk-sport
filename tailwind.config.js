/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./public/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode:'class',
  theme: {
    extend: {
      screens: {
        'sm': '640px',
        // => @media (min-width: 640px) { ... }

        'md': '768px',
        // => @media (min-width: 768px) { ... }

        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }

        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }

        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      },

      margin: {
        '20px' : '20px',
      },

      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },

      colors: {
        // Light Color
        'primary-color': '#97FB57',
        'secondary-color': '#121212',

        // Dark Color
        'dark-primary-color': '#3f741e',
        'dark-secondary-color': '#5e0034',
        
        // Dark Background
        'dark-primary-bg': '#97FB57',
        'dark-secondary-bg': '#121212',

        // Text Color
        'text-light': '#FFFFFF',
        'text-gray': '#C1C2C7',
        'text-dark-gray': '#393A3F',
        'text-dark-green': '#3c9703',
        'black-color': '#000000',
      },

      boxShadow: {
        'sm': '0.5px 2px 1px 0 ##9D4CCC'
      },
    },
  },
  plugins: [
    
  ],
}

