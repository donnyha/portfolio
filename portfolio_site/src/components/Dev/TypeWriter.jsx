import React, { useState, useEffect } from 'react';

export default function TypeWriter({ words, wait }) {
  const [txt, setTxt] = useState('');
  const [wordIndex, setWordIndex] = useState(0);
  const [isDeleting, setIsDeleting] = useState(false);

  useEffect(() => {
    const type = () => {
      const currentIndex = wordIndex % words.length;
      const currentWord = words[currentIndex];
      let typeSpeed = 100;

      if (isDeleting) {
        setTxt((prevTxt) => prevTxt.slice(0, -1));
        typeSpeed /= 2;

        if (txt === '') {
          setIsDeleting(false);
          setWordIndex((index) => (index + 1) % words.length);
          typeSpeed = wait;
        }
      } else {
        setTxt((prevTxt) => currentWord.substring(0, prevTxt.length + 1));

        if (txt === currentWord) {
          setIsDeleting(true);
          typeSpeed = 500; // Delay before deleting
        }
      }

      setTimeout(type, typeSpeed);
    };

    setTimeout(type, wait); // Initial start

    return () => clearTimeout(type);
  }, [txt, wordIndex, isDeleting, words, wait]);

  return <span className="txt">{txt}</span>;
}
