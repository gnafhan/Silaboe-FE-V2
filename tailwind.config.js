/** @type {import('tailwindcss').Config} */
export default {
  
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {

  plugins: [
      require('flowbite/plugin')
  ]

}
module.exports = {

  content: [
      "./node_modules/flowbite/**/*.js"
  ]

}
