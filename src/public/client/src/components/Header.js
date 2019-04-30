import React, { Component } from 'react'
import { Link, withRouter } from 'react-router-dom'

class Home extends Component {
    logOut(e) {
        e.preventDefault()
        localStorage.removeItem('usertoken')
        this.props.history.push(`/`)
    }

    render() {
        const loginRegLink = (

            <li className="navbar-nav border-right">
                <li className="nav-item">
                    <Link to="/login" className="nav-link">
                        Login
                    </Link>
                </li>
                <li className="nav-item">
                    <Link to="/register" className="nav-link">
                        Registrarse
                    </Link>
                </li>
            </li>
        )

        const userLink = (
            <ul className="navbar-nav border-right">
                <li className="nav-item">
                    <Link to="/profile" className="nav-link">
                        User
                    </Link>
                </li>
                <li className="nav-item">
                    <a href="" onClick={this.logOut.bind(this)} className="nav-link">
                        Logout
                    </a>
                </li>
            </ul>
        )

        return (
            <header className="navbar navbar-expand-lg navbar-dark bg-dark rounded">
                <div className="logo hidden-sm-down">
                    <h1>
                        <Link to="/" className="nav-link">
                            Home
                        </Link>
                    </h1>
                </div>
                <ul className = "navbar navbar-expand-lg rounded-right">
                    {localStorage.usertoken ? userLink : loginRegLink}
                </ul>
            </header>
        )
    }
}

export default withRouter(Home)
