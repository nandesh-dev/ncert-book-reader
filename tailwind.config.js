/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,html}",
  ],
  theme: {
    extend: {
      colors: {
        "gray-13": "#202020",
        "gray-15": "#252525",
        "gray-22": "#393939",
        "gray-10": "#1b1b1b",
        "green": "#00CB6A"
      }
    },
  },
  plugins: [],
}

