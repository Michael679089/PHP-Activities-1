// tailwind.config.js
const colors = require('tailwindcss/colors')

module.exports = {
  purge: {
    enabled: true,
    preserveHtmlElements: false,
    content: [ // Remove files here. start with ./
      './*.html',
      './*.php'
    ],
    extract: { // Custom Extraction Logic.
      md: (content) => {
        return content.match(/[^<>"'`\s]*/)
      }
    }
  },

  plugins: [
    require('@tailwindcss/forms'),
  ],
}
