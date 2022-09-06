/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    colors:{
      'black':'#000000',
      'white':'#FFFFFF',
      'w-blue':'#001524',
      'w-orange':'#FCA311',
      'w-gray':'#E5E5E5',
      'w-brown':'#FFECD1',
      'w-darkbrown':'#78290F',
      'w-green':'#15616D',
      'w-darkgreen':'#093f47',
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin'),
    require('tw-elements/dist/plugin')
  ],
};