module.exports = {
  // reactStrictMode: true,
  async rewrites() {
    return [
      {
        source: '/api/:path*',
        destination: 'https://one-sentence-a-day.vercel.app/:path*',
      },
    ]
  },
}
