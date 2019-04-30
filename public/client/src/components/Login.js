import React, { Component } from 'react'
import { login } from './UserFunctions'

class Login extends Component {
    constructor() {
        super()
        this.state = {
            email: '',
            password: '',
            errors: {}
        }

        this.onChange = this.onChange.bind(this)
        this.onSubmit = this.onSubmit.bind(this)
    }

    onChange(e) {
        this.setState({ [e.target.name]: e.target.value })
    }
    onSubmit(e) {
        e.preventDefault()

        const user = {
            email: this.state.email,
            password: this.state.password
        }

        login(user).then(res => {
            if (res) {
                this.props.history.push(`/profile`)
            }
        })
    }

    render() {
        return (
            <div class="account-pages mt-5 mb-5">
                <div className="container">
                    <div className="jumbotron">
                        <div className="row justify-content-center">
                            <div className="col-md-6 mt-5 mx-auto">
                                <div className="card-body">
                                    <form noValidate onSubmit={this.onSubmit}>
                                        <h1 className="h3 mb-3 font-weight-normal text-center">
                                            Iniciar Sesion
                                        </h1>
                                        <div className="form-group">
                                            <label htmlFor="email">Usuario</label>
                                            <input
                                                type="email"
                                                className="form-control"
                                                name="email"
                                                placeholder="Enter email"
                                                value={this.state.email}
                                                onChange={this.onChange}
                                            />
                                        </div>
                                        <div className="form-group">
                                            <label htmlFor="password">Contraseña</label>
                                            <input
                                                type="password"
                                                className="form-control"
                                                name="password"
                                                placeholder="Password"
                                                value={this.state.password}
                                                onChange={this.onChange}
                                            />
                                        </div>
                                        <button
                                            type="submit"
                                            className="btn btn-lg btn-primary btn-block"
                                        >
                                            Sign in
                                        </button>
                                    </form>

                                </div>
                                <div className="row mt-3">
                                    <div className="col-12">
                                        <p className="text-muted"><a>¿Olvidaste tu contraseña?</a></p>
                                        <p className="text-muted"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default Login
