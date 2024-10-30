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
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

