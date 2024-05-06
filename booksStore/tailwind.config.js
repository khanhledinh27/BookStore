/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./node_modules/flowbite/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
],
}