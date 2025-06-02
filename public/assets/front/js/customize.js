const {
    useGLTF,
    ContactShadows,
    Environment,
    OrbitControls
} = require("@react-three/drei");
const { Canvas, useFrame } = require("@react-three/fiber");
const { HexColorPicker } = require("react-colorful");
const { proxy, useSnapshot } = require("valtio");
const { cloneUniformsGroups } = require("three");
const luggage = require("../images/luggage2.glb");

// import { Canvas, useFrame } from "@react-three/fiber";
// import {
//     useGLTF,
//     ContactShadows,
//     Environment,
//     OrbitControls
// } from "@react-three/drei";
// import { HexColorPicker } from "react-colorful";
// import { proxy, useSnapshot } from "valtio";
// import luggage from "../images/luggage2.glb";
// import { cloneUniformsGroups } from "three";

const state = proxy({
    current: null,
    items: {
        front: "#000",
        back: "#000",
        strip: "#fff",
        handle: "#000",
        wheel: "#000",
        side: "#000"
    }
});

function Luggage() {
    const ref = React.useRef();
    const snap = useSnapshot(state);
    const { nodes, materials } = useGLTF(luggage);
    console.log(materials);
    const [hovered, set] = React.useState(null);

    useFrame(state => {
        const t = state.clock.getElapsedTime();
        ref.current.rotation.set(
            Math.cos(t / 4) / 8,
            Math.sin(t / 4) / 8,
            -0.2 - (1 + Math.sin(t / 1.5)) / 40
        );
        ref.current.position.y = (1 + Math.sin(t / 1.5)) / 10;
    });

    React.useEffect(() => {
        const cursor = `<svg width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path fill="rgba(255, 255, 255, 0.5)" d="M29.5 54C43.031 54 54 43.031 54 29.5S43.031 5 29.5 5 5 15.969 5 29.5 15.969 54 29.5 54z" stroke="#000"/><g filter="url(#filter0_d)"><path d="M29.5 47C39.165 47 47 39.165 47 29.5S39.165 12 29.5 12 12 19.835 12 29.5 19.835 47 29.5 47z" fill="${snap.items[hovered]}"/></g><path d="M2 2l11 2.947L4.947 13 2 2z" fill="#000"/><text fill="#000" style="white-space:pre" font-family="Inter var, sans-serif" font-size="10" letter-spacing="-.01em"><tspan x="35" y="63">${hovered}</tspan></text></g><defs><clipPath id="clip0"><path fill="#fff" d="M0 0h64v64H0z"/></clipPath><filter id="filter0_d" x="6" y="8" width="47" height="47" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="2"/><feGaussianBlur stdDeviation="3"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg>`;
        const auto = `<svg width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill="rgba(255, 255, 255, 0.5)" d="M29.5 54C43.031 54 54 43.031 54 29.5S43.031 5 29.5 5 5 15.969 5 29.5 15.969 54 29.5 54z" stroke="#000"/><path d="M2 2l11 2.947L4.947 13 2 2z" fill="#000"/></svg>`;
        if (hovered) {
            document.body.style.cursor = `url('data:image/svg+xml;base64,${btoa(
                cursor
            )}'), auto`;
            return () =>
                (document.body.style.cursor = `url('data:image/svg+xml;base64,${btoa(
                    auto
                )}'), auto`);
        }
    }, [hovered]);
    return (
        <>
            <group
                ref={ref}
                onPointerOver={e => (
                    e.stopPropagation(), set(e.object.material.name)
                )}
                onPointerOut={e => e.intersections.length === 0 && set(null)}
                onPointerMissed={() => (state.current = null)}
                onClick={e => (
                    e.stopPropagation(),
                    (state.current = e.object.material.name)
                )}
            >
                {/*<mesh receiveShadow castShadow geometry={nodes.luggage.geometry} material={materials.back} material-color={snap.items.back} />*/}
                <mesh
                    receiveShadow
                    castShadow
                    geometry={nodes.luggage.geometry}
                    material={materials.back}
                    material-color={snap.items.back}
                />
                <mesh
                    receiveShadow
                    castShadow
                    geometry={nodes.luggage_1.geometry}
                    material={materials.strip}
                    material-color={snap.items.strip}
                />
                <mesh
                    receiveShadow
                    castShadow
                    geometry={nodes.luggage_2.geometry}
                    material={materials.wheel}
                    material-color={snap.items.wheel}
                />
                <mesh
                    receiveShadow
                    castShadow
                    geometry={nodes.luggage_3.geometry}
                    material={materials.front}
                    material-color={snap.items.front}
                />
                <mesh
                    receiveShadow
                    castShadow
                    geometry={nodes.luggage_4.geometry}
                    material={materials.side}
                    material-color={snap.items.side}
                />
                <mesh
                    receiveShadow
                    castShadow
                    geometry={nodes.luggage_5.geometry}
                    material={materials.handle}
                    material-color={snap.items.handle}
                />
                {/*<mesh receiveShadow castShadow geometry={nodes.shoe_6.geometry} material={materials.band} material-color={snap.items.band} />*/}
                {/*<mesh receiveShadow castShadow geometry={nodes.shoe_7.geometry} material={materials.patch} material-color={snap.items.patch} />*/}
            </group>
        </>
    );
}

function Picker(props) {
    const { setColor, color } = props;
    const snap = useSnapshot(state);
    return (
        <div style={{ display: snap.current ? "block" : "none" }}>
            <HexColorPicker
                className="picker"
                color={color ? color : snap.items[snap.current]}
                // onChange={(color) => (state.items[snap.current] = color)}
                onChange={color => {
                    state.items[snap.current] = color;
                }}
            />
            <h1>{color}</h1>
        </div>
    );
}

function App() {
    const [color, setColor] = React.useState("#b32aa9");
    const snap = useSnapshot(state);
    console.log("color", color);
    return (
        <>
            <Canvas shadows camera={{ position: [8, 8, 8], fov: 40 }}>
                <ambientLight intensity={0.7} />
                <spotLight
                    intensity={0.5}
                    angle={0.1}
                    penumbra={1}
                    position={[10, 15, 10]}
                    castShadow
                />
                <Luggage />
                <Environment preset="city" />
                <ContactShadows
                    position={[0, -0.1, 0]}
                    opacity={0.25}
                    scale={10}
                    blur={1.5}
                    far={0.8}
                />
                <OrbitControls
                    minPolarAngle={Math.PI / 2}
                    maxPolarAngle={Math.PI / 2}
                    enableZoom={false}
                    enablePan={false}
                />
            </Canvas>
            current color is{color}
            <div className="buttons">
                {/*onChange={(color) => {(state.items[snap.current] = color)}}*/}
                <button
                    onClick={color => {
                        state.items[snap.current] = "#000000";
                        setColor("#000000");
                    }}
                >
                    Black
                </button>
                <button
                    onClick={color => {
                        state.items[snap.current] = "#ffffff";
                        setColor("#ffffff");
                    }}
                >
                    White
                </button>
                <button
                    onClick={color => {
                        state.items[snap.current] = "#207bd7";
                        setColor("#207bd7");
                    }}
                >
                    Navy Blue
                </button>
                <button
                    onClick={color => {
                        state.items[snap.current] = "#d00000";
                        setColor("#d00000");
                    }}
                >
                    Red
                </button>
            </div>
            <Picker setColor={setColor} color={color} />
        </>
    );
}

// ReactDOM.render(
//     <ReactAppFromCDN />,
//     document.querySelector("#")
// );

ReactDOM.render(<App />, document.getElementById("customizationModule"));
