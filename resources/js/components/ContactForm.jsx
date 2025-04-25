import React, { useState } from "react";
export default function ContactForm({ csrfToken }) {
    const [status, setStatus] = useState('');
  
    const handleSubmit = (e) => {
      e.preventDefault();
      fetch('/contact', {
        method: 'POST',
        body: new FormData(e.target),
        headers: { 'X-CSRF-TOKEN': csrfToken },
      });
    };
  
    return (
      <form onSubmit={handleSubmit}>
        <input name="email" type="email" required />
        <button type="submit">Submit</button>
        {status && <p>{status}</p>}
      </form>
    );
  }