const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
    ],
    theme: {
      colors: {
          'dark': {
            1: '#0E181B',
            2: '#233035',
            3: '#3C4A4F'
          },
          'light': {
            1: '#E5E8EA',
            2: '#F0F2F3',
            3: '#FFFFFF'
          },
          'highlight': {
            'regular': '#D0D757',
            'dangerous': '#FE6369'
          }
      },
      fontSize: {
          "big-title": [
              "64px",
              {
                  fontWeight: 1000
              }
          ],
          "heading-1": [
              "32px",
              {
                  fontWeight: 1000
              }
          ],
          "heading-2": [
              "24px",
              {
                  fontWeight: 1000
              }
          ],
          "number": [
            "28px",
            {
                fontWeight: 1000
            }
        ],
          "action": [
              "18px",
              {
                  fontWeight: 800
              }
          ],
          "lead": [
              "18px",
              {
                  fontWeight: 400
              }
          ],
          "lead-bold": [
            "18px",
            {
                fontWeight: 800
            }
        ],
          "body-bold": [
              "15px",
              {
                  fontWeight: 800
              }
          ],
          "body": [
              "15px",
              {
                  fontWeight: 400
              }
          ],
          "label-modal": [
            "12px",
            {
                fontWeight: 1000
            }
        ],
      },
      extend: {
          fontFamily: {
              sans: ['Recursive', ...defaultTheme.fontFamily.sans]
          }
      },
      borderRadius: {
        "normal": '16px',
        "little" : '8px'
      },
    },
    plugins: [require('@tailwindcss/forms')],
  }