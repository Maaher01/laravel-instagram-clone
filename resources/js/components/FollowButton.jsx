import axios from "axios";
import { useState } from "react";
import { useNavigate } from "react-router-dom";

const FollowButton = ({ userId, follows }) => {
    const navigate = useNavigate();
    const [isFollowing, setIsFollowing] = useState(follows === "true");

    const followUser = () => {
        axios
            .post(`/follow/${userId}`)
            .then((response) => {
                setIsFollowing(!isFollowing);
            })
            .catch((errors) => {
                if (errors.response.status == 401) {
                    navigate("/login");
                }
            });
    };

    return (
        <>
            <div>
                <button className="btn btn-primary ml-4" onClick={followUser}>
                    {isFollowing ? "Unfollow" : "Follow"}
                </button>
            </div>
        </>
    );
};

export default FollowButton;

if (document.getElementById("follow-button")) {
    const Index = ReactDOM.createRoot(document.getElementById("follow-button"));
    const userId = document
        .getElementById("follow-button")
        .getAttribute("user-id");
    const follows = document
        .getElementById("follow-button")
        .getAttribute("folows");

    Index.render(
        <React.StrictMode>
            <FollowButton userId={userId} />
        </React.StrictMode>
    );
}
