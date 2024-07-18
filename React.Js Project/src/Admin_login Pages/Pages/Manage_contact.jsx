import React, { useEffect, useState } from 'react'
import AHeader from '../Component/AHeader'
import AFooter from '../Component/AFooter'
import axios from 'axios';
import { toast } from 'react-toastify';
import { useParams } from 'react-router-dom';


function Manage_contact() {
    const [data, setdata] = useState([]);

    useEffect(() => {
        fetch();
    },[]);
    

    const fetch = async () => {
        const res = await axios.get(`http://localhost:3000/contact`);
        console.log(data);
        setdata(res.data)
    }

    const deleteHandel = async (id) => {
        const res = await axios.delete(`http://localhost:3000/contact/${id}`);
        toast.success('Contact Delete Sucess')
        // return false;
    }

    return (
        <div>
            <AHeader title="Manage contact" />
            < div className="container-fluid" >
                <div className="container">
                    <div className="row">

                        <div className=" col-lg-12 ">
                            <div className="bg-light  p-lg-5">
                                <h6 className="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Contact</h6>
                                <h1 className="mb-4">Manage Contact</h1>
                                <div id="success" />

                                <table className="table">
                                    <thead className="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {
                                            data && data.map((value, index, arr) => {
                                             return(
                                                <tr>
                                                <td>{value.id}</td>
                                                <td>{value.name}</td>
                                                <td>{value.email}</td>
                                                <td>{value.subject}</td>
                                                <td>{value.message}</td>
                                                <td>
                                                    <button className='btn btn-info mr-2'>Edit</button>
                                                    <button className='btn btn-danger' onClick={()=>deleteHandel(value.id)}>Delete</button>
                                                </td>
                                            </tr>
                                             )

                                            })
                                        }


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div >
            <AFooter />
        </div>
    )
}

export default Manage_contact
