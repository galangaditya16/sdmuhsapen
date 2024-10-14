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
        'kuning-tua': '##ffda3f',
        'kuning-muda': '#ffde59'
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

