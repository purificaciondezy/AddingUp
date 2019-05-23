<?php
/////////////////////////prior year
                     
                        echo '<tr>
                            <td><strong>Total Revenue</strong></td>';
                            
                                $RTLRdiff1p = array_sum($RTLR0p) - (array_sum($RTLR2p) + array_sum($RTLR3p));
                                if($RTLRdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($RTLRdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($RTLRdiff1p).'</td>';}

                                $RTLRdiff2p = array_sum($RTLR1p) - (array_sum($RTLR2p) + array_sum($RTLR3p));
                                if($RTLRdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($RTLRdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($RTLRdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Total Operating Expense</strong></td>';
                            
                                $ETOEdiff1p = array_sum($ETOE0p) - (array_sum($ETOE2p) + array_sum($ETOE3p));
                                if($ETOEdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($ETOEdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($ETOEdiff1p).'</td>';}

                                $ETOEdiff2p = array_sum($ETOE1p) - (array_sum($ETOE2p) + array_sum($ETOE3p));
                                if($ETOEdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($ETOEdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($ETOEdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Net Income After Taxes</strong></td>';
                            
                                $TIATdiff1p = array_sum($TIAT0p) - (array_sum($TIAT2p) + array_sum($TIAT3p));
                                if($TIATdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($TIATdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($TIATdiff1p).'</td>';}

                                $TIATdiff2p = array_sum($TIAT1p) - (array_sum($TIAT2p) + array_sum($TIAT3p));
                                if($TIATdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($TIATdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($TIATdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Extraordinary Item</strong></td>';
                            
                                $XTRAdiff1p = array_sum($XTRA0p) - (array_sum($XTRA2p) + array_sum($XTRA3p));
                                if($XTRAdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XTRAdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($XTRAdiff1p).'</td>';}

                                $XTRAdiff2p = array_sum($XTRA1p) - (array_sum($XTRA2p) + array_sum($XTRA3p));
                                if($XTRAdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XTRAdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($XTRAdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Income Available to Common Excl. Extraordinary Items </strong></td>';
                            
                                $CIACdiff1p = array_sum($CIAC0p) - (array_sum($CIAC2p) + array_sum($CIAC3p));
                                if($CIACdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($CIACdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($CIACdiff1p).'</td>';}

                                $CIACdiff2p = array_sum($CIAC1p) - (array_sum($CIAC2p) + array_sum($CIAC3p));
                                if($CIACdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($CIACdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($CIACdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Net Income Available to Com Incl ExtraOrd</strong></td>';
                            
                                $XNICdiff1p = array_sum($XNIC0p) - (array_sum($XNIC2p) + array_sum($XNIC3p));
                                if($XNICdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XNICdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($XNICdiff1p).'</td>';}

                                $XNICdiff2p = array_sum($XNIC1p) - (array_sum($XNIC2p) + array_sum($XNIC3p));
                                if($XNICdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XNICdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($XNICdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><a href="#STSI"><strong>Total Special Items</strong></td>';
                            
                                $STSIdiff1p = array_sum($STSI0p) - (array_sum($STSI2p) + array_sum($STSI3p));
                                if($STSIdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($STSIdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($STSIdiff1p).'</td>';}

                                $STSIdiff2p = array_sum($STSI1p) - (array_sum($STSI2p) + array_sum($STSI3p));
                                if($STSIdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($STSIdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($STSIdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Interest Expense, Supplemental </strong></td>';
                            
                                $VIEXdiff1p = array_sum($VIEX0p) - (array_sum($VIEX2p) + array_sum($VIEX3p));
                                if($VIEXdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VIEXdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VIEXdiff1p).'</td>';}

                                $VIEXdiff2p = array_sum($VIEX1p) - (array_sum($VIEX2p) + array_sum($VIEX3p));
                                if($VIEXdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VIEXdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VIEXdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Depreciation</strong></td>';
                            
                                $VDEPdiff1p = array_sum($VDEP0p) - (array_sum($VDEP2p) + array_sum($VDEP3p));
                                if($VDEPdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VDEPdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VDEPdiff1p).'</td>';}

                                $VDEPdiff2p = array_sum($VDEP1p) - (array_sum($VDEP2p) + array_sum($VDEP3p));
                                if($VDEPdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VDEPdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VDEPdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Amortisation</strong></td>';
                            
                                $VAMIdiff1p = array_sum($VAMI0p) - (array_sum($VAMI2p) + array_sum($VAMI3p));
                                if($VAMIdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMIdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VAMIdiff1p).'</td>';}

                                $VAMIdiff2p = array_sum($VAMI1p) - (array_sum($VAMI2p) + array_sum($VAMI3p));
                                if($VAMIdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMIdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VAMIdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Total Depreciation & Amortization(VDEP+VAMI)</strong></td>';
                            
                                $totalVdepVamidiff1p = array_sum($totalVdepVami0p) - (array_sum($totalVdepVami2p) + array_sum($totalVdepVami3p));
                                if($totalVdepVamidiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($totalVdepVamidiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($totalVdepVamidiff1p).'</td>';}

                                $totalVdepVamidiff2p = array_sum($totalVdepVami1p) - (array_sum($totalVdepVami2p) + array_sum($totalVdepVami3p));
                                if($totalVdepVamidiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($totalVdepVamidiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($totalVdepVamidiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Amortisation of Goodwill</strong></td>';
                            
                                $VAMAdiff1p = array_sum($VAMA0p) - (array_sum($VAMA2p) + array_sum($VAMA3p));
                                if($VAMAdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMAdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VAMAdiff1p).'</td>';}

                                $VAMAdiff2p = array_sum($VAMA1p) - (array_sum($VAMA2p) + array_sum($VAMA3p));
                                if($VAMAdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMAdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VAMAdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Gross Dividends - Common Stock</strong></td>';
                            
                                $DCGDdiff1p = array_sum($DCGD0p) - (array_sum($DCGD2p) + array_sum($DCGD3p));
                                if($DCGDdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DCGDdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DCGDdiff1p).'</td>';}

                                $DCGDdiff2p = array_sum($DCGD1p) - (array_sum($DCGD2p) + array_sum($DCGD3p));
                                if($DCGDdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DCGDdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DCGDdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>DPS - Common Stock Primary Issue 1</strong></td>';
                            
                                $DDPS1diff1p[] = array_sum($DDPS10p) - (array_sum($DDPS12p) + array_sum($DDPS13p));
                                if(array_sum($DDPS1diff1p)==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if(array_sum($DDPS1diff1p)==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format(array_sum($DDPS1diff1p)).'</td>';}

                                $DDPS1diff2p[] = array_sum($DDPS11p) - (array_sum($DDPS12p) + array_sum($DDPS13p));
                                if(array_sum($DDPS1diff2p)==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if(array_sum($DDPS1diff2p)==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format(array_sum($DDPS1diff2p)).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>DPS - Common Stock Primary Issue 2</strong></td>';
                            
                                $DDPS2diff1p = array_sum($DDPS20p) - (array_sum($DDPS22p) + array_sum($DDPS23p));
                                if($DDPS2diff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS2diff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DDPS2diff1p).'</td>';}

                                $DDPS2diff2p = array_sum($DDPS21p) - (array_sum($DDPS22p) + array_sum($DDPS23p));
                                if($DDPS2diff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS2diff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DDPS2diff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Special DPS – Common Stock Primary Issue </strong></td>';
                            
                                $DSPS1diff1p = array_sum($DSPS10p) - (array_sum($DSPS12p) + array_sum($DSPS13p));
                                if($DSPS1diff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DSPS1diff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DSPS1diff1p).'</td>';}

                                $DSPS1diff2p = array_sum($DSPS11p) - (array_sum($DSPS12p) + array_sum($DSPS13p));
                                if($DSPS1diff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DSPS1diff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DSPS1diff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Rental Expense, Supplemental</strong></td>'; 
                                $VRXPdiff1p = array_sum($VRXP0p) - (array_sum($VRXP2p) + array_sum($VRXP3p));
                                if($VRXPdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VRXPdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VRXPdiff1p).'</td>';}

                                $VRXPdiff2p = array_sum($VRXP1p) - (array_sum($VRXP2p) + array_sum($VRXP3p));
                                if($VRXPdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VRXPdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VRXPdiff2p).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Income Tax – Total</strong></td>';
                            
                                $VITTdiff1p = array_sum($VITT0p) - (array_sum($VITT2p) + array_sum($VITT3p));
                                if($VITTdiff1p==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VITTdiff1p==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VITTdiff1p).'</td>';}

                                $VITTdiff2p = array_sum($VITT1p) - (array_sum($VITT2p) + array_sum($VITT3p));
                                if($VITTdiff2p==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VITTdiff2p==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VITTdiff2p).'</td></tr>';}
                            ?>