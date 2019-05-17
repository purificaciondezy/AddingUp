 <?php                       echo '<tr>
                            <td><strong>Total Revenue</strong></td>';
                            
                                $RTLRdiff1 = array_sum($RTLR0) - (array_sum($RTLR2) + array_sum($RTLR3));
                                if($RTLRdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($RTLRdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($RTLRdiff1).'</td>';}

                                $RTLRdiff2 = array_sum($RTLR1) - (array_sum($RTLR2) + array_sum($RTLR3));
                                if($RTLRdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($RTLRdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($RTLRdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Total Operating Expense</strong></td>';
                            
                                $ETOEdiff1 = array_sum($ETOE0) - (array_sum($ETOE2) + array_sum($ETOE3));
                                if($ETOEdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($ETOEdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($ETOEdiff1).'</td>';}

                                $ETOEdiff2 = array_sum($ETOE1) - (array_sum($ETOE2) + array_sum($ETOE3));
                                if($ETOEdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($ETOEdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($ETOEdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Net Income After Taxes</strong></td>';
                            
                                $TIATdiff1 = array_sum($TIAT0) - (array_sum($TIAT2) + array_sum($TIAT3));
                                if($TIATdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($TIATdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($TIATdiff1).'</td>';}

                                $TIATdiff2 = array_sum($TIAT1) - (array_sum($TIAT2) + array_sum($TIAT3));
                                if($TIATdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($TIATdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($TIATdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Extraordinary Item</strong></td>';
                            
                                $XTRAdiff1 = array_sum($XTRA0) - (array_sum($XTRA2) + array_sum($XTRA3));
                                if($XTRAdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XTRAdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($XTRAdiff1).'</td>';}

                                $XTRAdiff2 = array_sum($XTRA1) - (array_sum($XTRA2) + array_sum($XTRA3));
                                if($XTRAdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XTRAdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($XTRAdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Income Available to Common Excl. Extraordinary Items </strong></td>';
                            
                                $CIACdiff1 = array_sum($CIAC0) - (array_sum($CIAC2) + array_sum($CIAC3));
                                if($CIACdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($CIACdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($CIACdiff1).'</td>';}

                                $CIACdiff2 = array_sum($CIAC1) - (array_sum($CIAC2) + array_sum($CIAC3));
                                if($CIACdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($CIACdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($CIACdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Net Income Available to Com Incl ExtraOrd</strong></td>';
                            
                                $XNICdiff1 = array_sum($XNIC0) - (array_sum($XNIC2) + array_sum($XNIC3));
                                if($XNICdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XNICdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($XNICdiff1).'</td>';}

                                $XNICdiff2 = array_sum($XNIC1) - (array_sum($XNIC2) + array_sum($XNIC3));
                                if($XNICdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($XNICdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($XNICdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><a href="#STSI"><strong>Total Special Items</strong></td>';
                            
                                $STSIdiff1 = array_sum($STSI0) - (array_sum($STSI2) + array_sum($STSI3));
                                if($STSIdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($STSIdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($STSIdiff1).'</td>';}

                                $STSIdiff2 = array_sum($STSI1) - (array_sum($STSI2) + array_sum($STSI3));
                                if($STSIdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($STSIdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($STSIdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Interest Expense, Supplemental </strong></td>';
                            
                                $VIEXdiff1 = array_sum($VIEX0) - (array_sum($VIEX2) + array_sum($VIEX3));
                                if($VIEXdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VIEXdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VIEXdiff1).'</td>';}

                                $VIEXdiff2 = array_sum($VIEX1) - (array_sum($VIEX2) + array_sum($VIEX3));
                                if($VIEXdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VIEXdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VIEXdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Depreciation</strong></td>';
                            
                                $VDEPdiff1 = array_sum($VDEP0) - (array_sum($VDEP2) + array_sum($VDEP3));
                                if($VDEPdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VDEPdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VDEPdiff1).'</td>';}

                                $VDEPdiff2 = array_sum($VDEP1) - (array_sum($VDEP2) + array_sum($VDEP3));
                                if($VDEPdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VDEPdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VDEPdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Amortisation</strong></td>';
                            
                                $VAMIdiff1 = array_sum($VAMI0) - (array_sum($VAMI2) + array_sum($VAMI3));
                                if($VAMIdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMIdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VAMIdiff1).'</td>';}

                                $VAMIdiff2 = array_sum($VAMI1) - (array_sum($VAMI2) + array_sum($VAMI3));
                                if($VAMIdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMIdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VAMIdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Total Depreciation & Amortization(VDEP+VAMI)</strong></td>';
                            
                                $totalVdepVamidiff1 = array_sum($totalVdepVami0) - (array_sum($totalVdepVami2) + array_sum($totalVdepVami3));
                                if($totalVdepVamidiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($totalVdepVamidiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($totalVdepVamidiff1).'</td>';}

                                $totalVdepVamidiff2 = array_sum($totalVdepVami1) - (array_sum($totalVdepVami2) + array_sum($totalVdepVami3));
                                if($totalVdepVamidiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($totalVdepVamidiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($totalVdepVamidiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Amortisation of Goodwill</strong></td>';
                            
                                $VAMAdiff1 = array_sum($VAMA0) - (array_sum($VAMA2) + array_sum($VAMA3));
                                if($VAMAdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMAdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VAMAdiff1).'</td>';}

                                $VAMAdiff2 = array_sum($VAMA1) - (array_sum($VAMA2) + array_sum($VAMA3));
                                if($VAMAdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VAMAdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VAMAdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Gross Dividends - Common Stock</strong></td>';
                            
                                $DCGDdiff1 = array_sum($DCGD0) - (array_sum($DCGD2) + array_sum($DCGD3));
                                if($DCGDdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DCGDdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DCGDdiff1).'</td>';}

                                $DCGDdiff2 = array_sum($DCGD1) - (array_sum($DCGD2) + array_sum($DCGD3));
                                if($DCGDdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DCGDdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DCGDdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>DPS - Common Stock Primary Issue 1</strong></td>';
                            
                                $DDPS1diff1 = array_sum($DDPS10) - (array_sum($DDPS12) + array_sum($DDPS13));
                                if($DDPS1diff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS1diff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DDPS1diff1).'</td>';}

                                $DDPS1diff2 = array_sum($DDPS11) - (array_sum($DDPS12) + array_sum($DDPS13));
                                if($DDPS1diff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS1diff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DDPS1diff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>DPS - Common Stock Primary Issue 2</strong></td>';
                            
                                $DDPS2diff1 = array_sum($DDPS20) - (array_sum($DDPS22) + array_sum($DDPS23));
                                if($DDPS2diff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS2diff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DDPS2diff1).'</td>';}

                                $DDPS2diff2 = array_sum($DDPS21) - (array_sum($DDPS22) + array_sum($DDPS23));
                                if($DDPS2diff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DDPS2diff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DDPS2diff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Special DPS – Common Stock Primary Issue </strong></td>';
                            
                                $DSPS1diff1 = array_sum($DSPS10) - (array_sum($DSPS12) + array_sum($DSPS13));
                                if($DSPS1diff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DSPS1diff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($DSPS1diff1).'</td>';}

                                $DSPS1diff2 = array_sum($DSPS11) - (array_sum($DSPS12) + array_sum($DSPS13));
                                if($DSPS1diff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($DSPS1diff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($DSPS1diff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Rental Expense, Supplemental</strong></td>'; 
                                $VRXPdiff1 = array_sum($VRXP0) - (array_sum($VRXP2) + array_sum($VRXP3));
                                if($VRXPdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VRXPdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VRXPdiff1).'</td>';}

                                $VRXPdiff2 = array_sum($VRXP1) - (array_sum($VRXP2) + array_sum($VRXP3));
                                if($VRXPdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VRXPdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VRXPdiff2).'</td></tr>';}
                            
                        
                        echo '<tr>
                            <td><strong>Income Tax – Total</strong></td>';
                            
                                $VITTdiff1 = array_sum($VITT0) - (array_sum($VITT2) + array_sum($VITT3));
                                if($VITTdiff1==0)
                                {echo '<td class="bgYellow center">'.$true.'</td>'; }
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VITTdiff1==0)
                                {echo '<td class="bgYellow center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgYellow right">'.number_format($VITTdiff1).'</td>';}

                                $VITTdiff2 = array_sum($VITT1) - (array_sum($VITT2) + array_sum($VITT3));
                                if($VITTdiff2==0)
                                {echo '<td class="bgGreen center">'.$true.'</td>';}
                                else
                                {echo '<td class="bgRed center">'.$false.'</td>';}
                
                                if($VITTdiff2==0)
                                {echo '<td class="bgGreen center">'.$blank.'</td>';}
                                else
                                {echo '<td class="bgGreen right">'.number_format($VITTdiff2).'</td></tr>';}
                            
                        ?>