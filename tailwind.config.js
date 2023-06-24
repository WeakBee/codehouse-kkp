/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'myBlue' : '#1B1AFF',
        'myBlack' : '#101010',
        'myGreen' : '#A7F46A',
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

