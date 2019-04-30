import React, {Component} from 'react'
import {Link, withRouter} from 'react-router-dom'

class Sidebar extends Component {
    render() {
        const blancoLink = {

        }
        const menuLink = {

        }

        return (
            <aside className="sidebar">
                <div className="scrollbar-inner">
                    <ul class="navigation">
                        <li class="navigation__sub @@tableactive">

                            {localStorage.usertoken ? blancoLink : menuLink}
                        </li>
                    </ul>
                </div>
            </aside>
        )
    }
}

export default withRouter(Sidebar)
