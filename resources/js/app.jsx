import React from 'react';
import { createRoot } from 'react-dom/client';
import Home from './pages/Home';

const container = document.getElementById('app');
const root = createRoot(container);

root.render(<Home />);

// import React from 'react';
// import ReactDOM from 'react-dom/client';

// const App = () => {
//   return (
//     <div>
//       <h1>React is working in Laravel! 🚀</h1>
//     </div>
//   );
// };

// const rootElement = document.getElementById('app');
// if (rootElement) {
//   ReactDOM.createRoot(rootElement).render(<App />);
// }


