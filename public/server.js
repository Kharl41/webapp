const express = require('express');
const path = require('path');
const app = express();
const port = process.env.PORT || 3000;

// Serve static files (index.html, JS, CSS) from the 'public' folder
app.use(express.static(path.join(__dirname, 'public')));

// Example API endpoint
app.get('/api/message', (req, res) => {
  res.json({ message: 'Hello from the backend API!' });
});

// Catch-all route for other requests (e.g., any non-API route) to serve index.html
app.get('*', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

app.listen(port, () => {
  console.log(`Server is running at http://localhost:${port}`);
});
