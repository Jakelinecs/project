import React, { Component } from 'react'
import { BrowserRouter as Router, Route } from 'react-router-dom'

import Header from './components/Header'
import Home from './components/Home'
import Login from './components/Login'
import Register from './components/Register'
import Profile from './components/Profile'
import Sidebar from './components/Sidebar'

class App extends Component {
    render() {
        return (
            <Router>
                <div className="App">
                    <Header />
                        <Route exact path="/" component={Home} />
                    <div className="container">
                        <Route exact path="/register" component={Register} />
                        <Route exact path="/login" component={Login} />
                        <Route exact path="/profile" component={Profile} />
                    </div>
                </div>
            </Router>
        )
    }
}

export default App
