<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Notification Email with Divisi</title>
  <style>
    body {
      background-color: #f7fafc; /* Gray-100 */
      color: #2d3748; /* Gray-800 */
      margin: 0;
      padding: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }
    .container {
      max-width: 600px;
      margin: 48px auto;
      background-color: #ffffff; /* White */
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 32px;
    }
    h2 {
      font-size: 24px;
      font-weight: bold;
      color: #3182ce; /* Blue-600 */
      text-align: center;
      margin-bottom: 32px;
    }
    .section {
      margin-bottom: 24px;
    }
    .label {
      display: block;
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      color: #a0aec0; /* Gray-500 */
      margin-bottom: 8px;
    }
    .value {
      background-color: #ebf8ff; /* Blue-50 */
      border: 1px solid #bee3f8; /* Blue-200 */
      border-radius: 4px;
      padding: 12px;
      color: #1a202c; /* Gray-900 */
      word-break: break-word;
    }
    footer {
      text-align: center;
      font-size: 12px;
      color: #a0aec0; /* Gray-400 */
      border-top: 1px solid #e2e8f0; /* Gray-200 */
      padding-top: 16px;
      margin-top: 32px;
      font-style: italic;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Notification Email</h2>

    <div class="section">
      <label class="label" for="name">Name</label>
      <p id="name" class="value">{{ $data->name ?? '-' }}</p>
    </div>

    <div class="section">
      <label class="label" for="division">Divisi</label>
      <p id="division" class="value">{{ $data->shown ?? '-' }}</p>
    </div>

    <div class="section">
      <label class="label" for="phone">Phone Number</label>
      <p id="phone" class="value">{{ $data->phone ?? '' }}</p>
    </div>

    <div class="section">
      <label class="label" for="email">Email</label>
      <p id="email" class="value">{{ $data->email ?? '-' }}</p>
    </div>

    <div class="section">
      <label class="label" for="message">Message</label>
      <p id="message" class="value" style="white-space: pre-line;">{{ $data->message ?? '-' }}</p>
    </div>

    <footer>
      This is an automatically generated notification email.<br />
      Please do not reply to this message.
    </footer>
  </div>
</body>
</html>
