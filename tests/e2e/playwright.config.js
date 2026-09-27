// Runs against the local XAMPP site. Override with XP_BASE_URL.
const { defineConfig, devices } = require('@playwright/test');

module.exports = defineConfig({
  testDir: '.',
  timeout: 180000,
  workers: 1,
  reporter: 'list',
  use: {
    baseURL: process.env.XP_BASE_URL || 'http://localhost/xplorers/',
    ...devices['Pixel 7'],
  },
});
