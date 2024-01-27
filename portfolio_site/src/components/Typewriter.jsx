import Typewriter from 'typewriter-effect';

const TypewriterComponent = ({ strings }) => {
  return (
      <Typewriter
        options={{
          strings: strings,
          autoStart: true,
          loop: true,
          wrapperClassName: 'pink'
        }}
      />
  );
};

export default TypewriterComponent;