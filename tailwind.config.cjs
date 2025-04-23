/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './public/**/*.html',        // Tambahkan jika kamu import template HTML langsung
    './resources/**/*.html' 
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  
}
