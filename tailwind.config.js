/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        easyLetter: '#6D6D6D',
        greenModified: '#198754'
      },
      fontFamily: {
        title: '"Open Sans", sans-serif'
      }
    },
  },
  plugins: [],
}

