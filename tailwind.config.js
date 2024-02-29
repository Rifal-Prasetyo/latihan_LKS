/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/views/components/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#22092C',
        'secondary': '#872341',
        'accent': '#BE3144',
        'accent1': '#F05941',
        'teks': '#F6FDC3',
        'success': '#74E291',
        'danger': '#DF2E38',
        'warning': '#F9D923'
      }
    },
  },
  plugins: [],
}

