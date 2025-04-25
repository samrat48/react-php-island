// import './bootstrap';
import * as React from 'react';
import { createRoot } from 'react-dom/client';

// Component Map (lazy-loaded)
const components = {
  AddToCart: React.lazy(() => import('./components/AddToCart')),
  ContactForm: React.lazy(() => import('./components/ContactForm')),
  // ProductReviews: React.lazy(() => import('./components/ProductReviews')),
};

// Hydrate all detected components
document.querySelectorAll('[data-react-component]').forEach(el => {
  const componentName = el.dataset.reactComponent;
  const props = JSON.parse(el.dataset.props || '{}');
  
  const Component = components[componentName];
  if (Component) {
    const root = createRoot(el);
    root.render(
      <React.Suspense fallback={<div>Loading...</div>}>
        <Component {...props} />
      </React.Suspense>
    );
  }
});