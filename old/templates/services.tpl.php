<!-- <div class="chart Treant loaded" id="collapsable-example"></div>
 -->

<style>
/* optional Container STYLES */
.chart { height: auto; margin: 5px; width: 100%; }
.Treant > .node { padding: 3px; border: 1px solid orange; border-radius: 3px; }
.Treant > .node img { width: 100%; height: 100%; }

.Treant .collapse-switch { width: 100%; height: 100%; border: none; }
.Treant .node.collapsed .collapse-switch { background: none; }
</style>


<script>


    var chart_config = {
        chart: {
           rootOrientation: "NORTH",
           
            container: "#collapsable-example",
            node: {
                collapsable: true
            },
            animateOnInit: false,
            
            animation: {
                nodeAnimation: "easeOutBounce",
                nodeSpeed: 700,
                connectorsAnimation: "bounce",
                connectorsSpeed: 700
            },
            connectors: {
              type: "step",
              style: {
                stroke: "#e7803c"
              }
            }
            
        },
        nodeStructure: {
           text: {
              name: "Services We Provide"
           },
            children: [
                {
                    text: {
                      name: "Consulting",
                     },
                    children: [
                        {
                            text: {
                              name: "Initial Consultation",
                            }
                        },
                        {
                            text: {
                              name: "Tokenomics Review",
                            }
                        },
                        {
                            text: {
                              name: "Launch Review",
                            }
                        }
                        
                        
                    ]
                },
                {
                    text: {
                      name: "Technology",
                    },
                    children: [
                        {
                            text: {
                              name: "Smart Contract",
                            },
                        },
                        {
                            text: {
                              name: "Landing Site",
                            },
                        },
                        {
                            text: {
                              name: "Contribution Platform",
                              desc: "(requires node below)"
                            },
                        },
                        {
                            text: {
                              name: "Secure Node Programming",
                            },
                        },
                        {
                            text: {
                              name: "Compliant Investor Prospectus Platform",
                            },
                        },
                        {
                            text: {
                              name: "B.A.A.S",
                              desc: "Blockchain as a Service"
                            },
                        },
                    ]
                },
                {
                    text: {
                      name: "Services",
                    },
                    children: [
                        {
                            text: {
                              name: "White Paper Review",
                            },
                        },
                        {
                            text: {
                              name: "White Paper Writing",
                            },
                        },
                        {
                            text: {
                              name: "30x ICO Listing Sites",
                            },
                        },
                        {
                            text: {
                              name: "Launch Coordination",
                            },
                        },
                        {
                            text: {
                              name: "Advisor Sourcing",
                            },
                        },
                    ]
                }
                
            ]
        }
    };
    
    const tree = new Treant( chart_config );
</script>