/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontSize: {
        '6xl': '5rem',
        '7xl': '6rem',
        '8xl': '7rem',
        '9xl': '8rem',
      },
    },
  },
  plugins: [require("./plugin")],
};
