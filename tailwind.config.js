/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {    
    extend: {
      colors: {
        'dark-blue': '#000080',
        'hover-menu': '#f86f03',
        'oren': '#f86f03', 
        'oren-muda': '#f86f0333',
        'kuning-tua': '#ffda3f',
        'kuning-muda': '#ffde59',
        'biru-remaja': '#4379f2',
        'biru-tua': '#004aad', 
        'biru-langit': '#b6e4ff',
        'pink': '#ff66c4',
        'pink-muda': '#ffaee0', 
        'hijau-tua': '#217f43',
        'hijau-muda': '#97d7b6',
        'hijau-terang': '#c1ff72'

      },
      fontFamily: {
        abeezee: ['AbeeZee'], // Menambahkan font lokal
      },
      textShadow: {
        'white-1': '1px 1px 3px #fff'
      }
    },
  },
  corePlugins: {
    container: false
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen sm': {
            maxWidth: '640px',
          },
          '@screen md': {
            maxWidth: '1366px',
          },
          '@screen lg': {
            maxWidth: '1366px',
          },
          '@screen xl': {
            maxWidth: '1366px',
          },
        }
      })
    },
    require('flowbite/plugin'), 
    require('tailwindcss-textshadow')
  ],
}

