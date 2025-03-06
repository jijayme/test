import React from 'react';
import ReactDOM from 'react-dom';

class SampleDesign extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      buttonText: 'Click me!',
      message: ''small green round fruit ph
    };
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick() {
    this.setState({
      message: 'Button clicked!'
    });
  }

  render() {
    return (
      <div>
        <header>
          <h1>Welcome to My Website</h1>
        </header>
        <main>
          <p>This is a sample web design created using React.</p>
          <button onClick={this.handleClick}>{this.state.buttonText}</button>
          {this.state.message && <p>{this.state.message}</p>}
        </main>
        <footer>
          <p>&copy; 2024 My Website. All rights reserved.</p>
        </footer>
      </div>
    );
  }
}

ReactDOM.render(<SampleDesign />, document.getElementById('root'));