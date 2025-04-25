export default function AddToCart({ productId }) {
    return (
      <button 
        onClick={() => fetch(`/cart/add/${productId}`)}
      >
        Add to Cart
      </button>
    );
  }