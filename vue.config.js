const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  css: {
    devSourcemap: true,
  },
  transpileDependencies: true,
})
